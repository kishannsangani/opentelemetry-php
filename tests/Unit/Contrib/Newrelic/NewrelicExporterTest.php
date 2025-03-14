<?php

declare(strict_types=1);

namespace OpenTelemetry\Tests\Unit\Contrib\Newrelic;

use OpenTelemetry\Contrib\Newrelic\Exporter;
use OpenTelemetry\Tests\Unit\Contrib\AbstractHttpExporterTest;

/**
 * @covers OpenTelemetry\Contrib\Newrelic\Exporter
 */
class NewrelicExporterTest extends AbstractHttpExporterTest
{
    protected const EXPORTER_NAME = 'test.newrelic';
    protected const LICENSE_KEY = 'abc123';

    /**
     * @psalm-suppress PossiblyInvalidArgument
     */
    public function createExporterWithDsn(string $dsn): Exporter
    {
        return new Exporter(
            self::EXPORTER_NAME,
            $dsn,
            self::LICENSE_KEY,
            $this->getClientInterfaceMock(),
            $this->getRequestFactoryInterfaceMock(),
            $this->getStreamFactoryInterfaceMock()
        );
    }

    public function getExporterClass(): string
    {
        return Exporter::class;
    }
}
